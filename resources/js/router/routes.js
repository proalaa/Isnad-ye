function page (path) {
  return () => import(/* webpackChunkName: '' */ `~/pages/${path}`).then(m => m.default || m)
}

export default [
  { path: '/', name: 'welcome', component: page('welcome.vue') },

  { path: '/login', name: 'login', component: page('auth/login.vue') },
  { path: '/register', name: 'register', component: page('auth/register.vue') },
  { path: '/password/reset', name: 'password.request', component: page('auth/password/email.vue') },
  { path: '/password/reset/:token', name: 'password.reset', component: page('auth/password/reset.vue') },
  { path: '/email/verify/:id', name: 'verification.verify', component: page('auth/verification/verify.vue') },
  { path: '/email/resend', name: 'verification.resend', component: page('auth/verification/resend.vue') },
  { path: '/home', name: 'home', component: page('home.vue') },
  { path: '/profile', name: 'profile', component: page('profile/index.vue') },

  { path: '/orders' , redirect:{name: 'my_orders'}},
  { path: '/orders/myorders' , name:'my_orders' , component:page('orders/myOrders')},
  { path: '/orders/new' , name:'new_order', component:page('orders/newOrder')},
  { path: '/orders/:id/edit' , name:'edit_order', component:page('orders/editOrder')},
  { path: '/orders/published' , name: 'published_orders' , component:page('orders/publishedOrders')},
  { path: '/orders/published/:id' , name: 'order_participate' , component:page('orders/orderParticipate')},
  { path: '/orders/:id/offers' , name:'order_offers' , component:page('orders/orderOffers')},
  { path: '/offers' , name:'my_offers' , component:page('offers/myOffers')},
  { path: '/offers/orders' , name:'facility_offers' , component:page('offers/facilityOffers')},
  { path: '/offers/create' , name:'new_offers' , component:page('offers/newOffer')},
  { path: '/offers/:id/edit' , name:'edit_offer' , component:page('offers/editOffer')},

  // {path: '/orr' , name:'fff' , component:page('orders/myOrders.vue')},
  {
    path: '/settings',
    component: page('settings/index.vue'),
    children: [
      { path: '', redirect: { name: 'settings.profile' } },
      { path: 'profile',name:'settings.profile' ,component: page('settings/profile.vue') },
      { path: 'password', name: 'settings.password', component: page('settings/password.vue') }
    ]
  },

  { path: '*', component: page('errors/404.vue') }
]
