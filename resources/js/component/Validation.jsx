import React from 'react'
import Isvalid from './Isvalid'
import Isnotvalid from './Isnotvalid'
export default function Validation(props) {
  if (props.cond === 1) {
    return(
        <Isvalid/>
    )
  }else  {
    return(
        <Isnotvalid/>
    )
  }
}
