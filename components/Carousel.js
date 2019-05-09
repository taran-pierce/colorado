import React from 'react'
import PropTypes from 'prop-types'

class Carousel extends React.Component {
  constructor( props ) {
    super( props )
  
    this.state = {
      currentImage: 1,
      maxCount: props.count,
      navLeftDisabled: 1,
      navRightDisabled: 0,
    }
  
    this.navLeft = this.navLeft.bind(this)
    this.navRight = this.navRight.bind(this)
  }
  
  navLeft() {
    console.log('oh hai left: ', this)

    let newImage = (this.state.currentImage - 1)

    if ( newImage >= 1 ) {
      this.setState({ currentImage: newImage })
    }
  }

  navRight() {
    console.log('oh hai right: ', this)
 
    let newImage = (this.state.currentImage + 1)

    if ( newImage <= this.state.maxCount ) {
      this.setState({ currentImage: newImage })
    }
  }

  render() {
    return (
      <section>
        <h2>test</h2>
        <h3>We have {this.props.count} images!</h3>
        <div>
          <img src={this.props.imageArray[this.state.currentImage]} />
          <div>
            <a className={'nav-arrow left'} onClick={this.navLeft}>Left</a>
            <a className={'nav-arrow right'} onClick={this.navRight}>Right</a>
          </div>
        </div>
      </section>
    )
  }
}

Carousel.propTypes = {
  count: PropTypes.number,
  imageArray: PropTypes.array,
}

export default Carousel