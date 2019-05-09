import React from 'react'
import Carousel from '../components/Carousel'

const containerStyles = {
  maxWidth: '970px',
  margin: '0 auto',
}

const Page = ( props ) => {
  return (
    <div style={containerStyles}>
      <h1>hi</h1>
      <Carousel count={props.count} imageArray={props.imageArray} />
    </div>
  )
}

Page.getInitialProps = async function( res ) {
  const count = 20
  let imageArray = []
  const place = 'arthurs-rock'

  for (let i = 0; i <= count; i++) {
    let imagePath = `/static/images/parks/${place}/desktop/${i}.jpg`
    imageArray.push(imagePath)
  }

  return {
    imageArray,
    count,
    place,
  }
}

export default Page