import styles from './photoBlock.module.scss';

export default function PhotoBlock(props) {
  const { imageData } = props;

  if (imageData?.urls?.length === 0 || imageData === undefined) {
    return <p>no image data...</p>
  }
  
  // TODO need to make it where I can link to better photos
  // either need more transform URLs or run that function again with different
  // options for the "light box" or full size photo
  return (
    <div className={styles.photoBlockWrapper}>
      {imageData && imageData?.urls?.map((image) => (
        <div key={image}>
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
