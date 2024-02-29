import styles from './photoBlock.module.scss';

export default function PhotoBlock(props) {
  const { imageData } = props;

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
