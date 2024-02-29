import styles from './photoBlock.module.scss';

const { env } = process;

export default function PhotoBlock(props) {
  const { imageData } = props;

  const isDev = env.NODE_ENV === 'development';

  if (imageData?.urls?.length === 0 || imageData === undefined) {
    return <p>no image data...</p>
  }
  
  return (
    <div className={styles.photoBlockWrapper}>
      {imageData && imageData?.urls?.map((image) => (
        <div key={image}>
          <img
            src={image}
            alt={image}
          />
        </div>
      ))}
    </div>
  )
}
