import React from 'react'
import { Outlet } from 'react-router-dom'

function GuestLayout() {
  return (
    <div>
      Guest Layout
      <Outlet />
    </div>
  )
}

export default GuestLayout
