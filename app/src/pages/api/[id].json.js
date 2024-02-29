import {
  getTransformationUrls,
  getAssetsByTagName,
} from '../../utils/useCloudinary';

import { places } from '../../utils/places';

// gets the transform URLs from cloudinary for each file from each location
// uses "tag" in cloudinary and added to /utils/places.ts
export const GET = async ({ params }) => {
  const id = params.id;

  const imageData = await getAssetsByTagName(id);
  const response = await getTransformationUrls(imageData);

  return new Response(
    JSON.stringify({
      urls: response,
    })
  )
}

export function getStaticPaths() {
  // loop through all the places to get only the tags
  // flatten them, they will be separated by location
  const tags = places.map((place) => {
      return place.tags;
    }
  ).flat();

  // shape an object to match the static path export
  // using the tag for the id
  const pages = tags.map((tag) => {
    return {
      params: {
        id: tag,
      }
    }
  });

  // returns back an api path for each location
  return pages;
}
