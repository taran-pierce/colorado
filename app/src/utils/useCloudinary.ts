import { v2 as cloudinary } from 'cloudinary';

const cloudinaryConfig = {
	cloud_name: import.meta.env.CLOUDINARY_CLOUD_NAME,
	api_key: import.meta.env.CLOUDINARY_API_KEY,
	api_secret: import.meta.env.CLOUDINARY_SECRET,
	// TODO Azure preview envs are still using the "dev" value here
	// secure: import.meta.env.CLOUDINARY_SSL,
	// ssl_detected: true,
};

cloudinary.config(cloudinaryConfig);

// grab all the images by tag name and get transform URLs
// doesnt include transformations though
export async function getAssetsByTagAndTransformUrls(tag: string) {
	// Return colors in the response
	const options = {
		colors: true,
	};

	try {
		// Get details about the asset
		const result = await cloudinary.api.resources_by_tag(tag, options).then((data) => {
			return data.resources;
		});

		const getUrls = await getTransformationUrls(result);

		return getUrls;
	} catch (error) {
		console.error(error);
	}
};

// get asset information by tag name
export async function getAssetsByTagName(tag: string) {
	// Return colors in the response
	const options = {
		colors: true,
	};

	try {
		// Get details about the asset
		const result = await cloudinary.api.resources_by_tag(tag, options).then((data) => {
			return data.resources;
		});

		return result;
	} catch (error) {
		console.error(error);
	}
};

// // grab url with transforms
export async function getTransformationUrls(images: any) {
	try {
		const imageCount = images.length;

		function isDivisibleBy3(number: any) {
			return number % 3 === 0;
	}

	let imageHeight = 320;

	if (isDivisibleBy3(imageCount)) {
    imageHeight = 320;
	}

		// TODO set up more transforms here of course
		const imageURLs = await images.map((image:any) => {
			const imageURL = cloudinary.url(image.public_id, {
				height: imageHeight,
				// width: ,
				client_hints: "true",
				crop: "fit",
				format: "webp",
				sizes: "100vw",
				quality: 70,
				secure: import.meta.env.CLOUDINARY_SSL,
			});

			return imageURL;
		});

		const data = await imageURLs;

		return data;
	} catch (error) {
    console.log('had a problem!', error);
	}
};
