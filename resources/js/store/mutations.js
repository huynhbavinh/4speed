export default {
    setSpecStore(state, specStore) {
        state.specStore = specStore;
    },
    setOptionStore(state, optionStore) {
        state.optionStore = optionStore;
    },
    setImgStore(state, imgProductStore) {
        state.imgProductStore = imgProductStore;
    },
    PlusCountGobackStore(state) {
        state.countGobackStore++;
    }
}