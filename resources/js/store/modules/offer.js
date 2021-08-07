// import axios from 'axios'
// import * as types from '../mutation-types'
//
// // state
// export const state = {
//   offers: null,
// }
//
// // getters
// export const getters = {
//   offers: state => state.offers,
// }
//
// // mutations
// export const mutations = {
//
//
//   [types.LOGOUT] (state) {
//     state.user = null
//     state.token = null
//
//     Cookies.remove('token')
//   },
//
//   [types.UPDATE_USER] (state, { user }) {
//     state.user = user
//   }
// }
//
// // actions
// export const actions = {
//   saveToken ({ commit, dispatch }, payload) {
//     commit(types.SAVE_TOKEN, payload)
//   },
//
//   async createoffer ({ commit }) {
//     try {
//       const { data } = await axios.get('/api/')
//
//       commit(types.FETCH_USER_SUCCESS, { user: data })
//     } catch (e) {
//       commit(types.FETCH_USER_FAILURE)
//     }
//   },
//
//   updateUser ({ commit }, payload) {
//     commit(types.UPDATE_USER, payload)
//   },
//
//   async logout ({ commit }) {
//     try {
//       await axios.post('/api/logout')
//     } catch (e) { }
//
//     commit(types.LOGOUT)
//   },
//
//   async fetchOauthUrl (ctx, { provider }) {
//     const { data } = await axios.post(`/api/oauth/${provider}`)
//
//     return data.url
//   }
// }
