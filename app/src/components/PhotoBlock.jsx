import { getTransformationUrls } from '../utils/useCloudinary';
import {
  useState,
  useRef,
  useEffect,
} from 'react';

import styles from './photoBlock.module.scss';

const { env } = process;

export default function PhotoBlock({
  imageData = [],
  titleCase = '',
}) {
  const [images, setImages] = useState(imageData);
  
  useEffect(() => {
    setImages(imageData);
  }, [imageData]);

  const isDev = process.env.NODE_ENV === 'development';
  
  return (
    <div className={styles.photoBlockWrapper}>
      {images.map((image) => (
        <img
          src={isDev ? image.url : image.secure_url}
          alt={image.folder}
        />
      ))}
    </div>
  )
}
