import React from 'react'
import { Outlet } from 'react-router-dom'

function DefaultLayout() {
  return (
    <div>
      Default Layout    
      <Outlet />  
    </div>
  )
}

export default DefaultLayout
