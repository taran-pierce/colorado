import { v2 as cloudinary } from 'cloudinary';

cloudinary.config({
	cloud_name: import.meta.env.CLOUDINARY_CLOUD_NAME,
	api_key: import.meta.env.CLOUDINARY_API_KEY,
	api_secret: import.meta.env.CLOUDINARY_SECRET,
	// TODO Azure preview envs are still using the "dev" value here
	secure: import.meta.env.CLOUDINARY_SSL,
	// ssl_detected: true,
});

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
		// TODO set up more transforms here of course
		const imageURLs = images.map((image:any) => {
			const imageURL = cloudinary.url(image.public_id, {
				height: '60',
				// width: ,
				client_hints: "true",
				crop: "fit",
				format: "webp",
				sizes: "100vw",
				quality: 70,
				// TODO oh, I bet this is why
				secure: import.meta.env.CLOUDINARY_SSL,
			});

			return imageURL;
		}); 

		return imageURLs;
	} catch {
    console.log('had a problem!');
	}
};
