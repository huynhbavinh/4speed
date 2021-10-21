export default {
    updateSpecStore(context, newSpecStore) {
        context.commit('setSpecStore', newSpecStore);
    },
    updateOptionStore(context, newOptionStore) {
        context.commit('setOptionStore', newOptionStore);
    },
    updateImgProduct(context, newimgProductStore) {
        context.commit('setImgStore', newimgProductStore);
    },
    updateCountGoBack(context) {
        context.commit('PlusCountGobackStore');
    }
}