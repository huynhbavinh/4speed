export default {
    updateSpecStore(context, newSpecStore) {
        context.commit('setSpecStore', newSpecStore);
    },
    updateOptionStore(context, newOptionStore) {
        context.commit('setOptionStore', newOptionStore);
    },
}