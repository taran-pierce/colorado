import { getTransformationUrls } from '../utils/useCloudinary';
import {
  useState,
  useRef,
  useEffect,
} from 'react';

export default function PhotoBlock({
  imageData = [],
  titleCase = '',
}) {
  const [images, setImages] = useState(undefined);

 useEffect(() => {
  console.log('running');
  getTransformationUrls(imageData).then((res) => {
    console.log({
      res,
    });
  
    // setImages(res);

    // console.log({
    //   images,
    // });
   });
 }, [imageData])

 console.log({
  images,
 });

  return (
    <div className="photo-wrapper">
      {/* {imageData && imageData.map((image, index) => (
        <AdvancedImage cldImg={image.public_id} />
      ))} */}
    </div>
  )
}
