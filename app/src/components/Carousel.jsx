import {
  useEffect,
  useRef,
} from 'react';

import styles from './carousel.module.scss';

export default function Testing(props) {
  const ref = useRef(undefined);

  const { imageData } = props;

  if (imageData?.urls?.length === 0 || imageData === undefined) {
    return <p>no image data...</p>
  }

  useEffect(() => {
    const { current } = ref;
    current && current.classList.add(styles.loaded);
  }, []);
  return (
    <div
      className={styles.photoBlockWrapper}
      ref={ref}
    >
      {imageData && imageData?.urls?.map((image) => (
        <div
          key={image}
          className={styles.photoWrapper}
        >
          <a href={image}>
            <img
              src={image}
              alt={image}
            />
          </a>
        </div>
      ))}
    </div>
  )
}
