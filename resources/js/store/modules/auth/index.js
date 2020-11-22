import actions from "./actions";
import getters from "./getters";

export default {
    state() {
        return {
            userId: null,
            token: null,
        };
    },
    actions,
    getters,
};
