import * as types from '../mutation-types'
export const state = {
  sidebarOpen: true
}

export const getters = {
  isSidebarOpen: state => state.sidebarOpen
}

export const mutations = {
  [types.TOGGLE_SIDEBAR] (state) {
    state.sidebarOpen = !state.sidebarOpen
  }
}

export const actions = {
  toggleSidebar ({ commit, state }) {
    commit(types.TOGGLE_SIDEBAR)
  },
  openSidebar ({ commit, state }) {
    if (!state.sidebarOpen) { commit(types.TOGGLE_SIDEBAR) }
  },
  closeSidebar ({ commit, state }) {
    if (state.sidebarOpen) { commit(types.TOGGLE_SIDEBAR) }
  }
}
