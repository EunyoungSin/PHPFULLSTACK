const TOKEN_ID = "php506_token";

const getToken = () => {
    return window.localStorage.getItem(TOKEN_ID);
};

const setToken = () => {
    window.localStorage.setItem(TOKEN_ID, token);
    return true;
};

const destroyToken = () => {
    window.localStorage.removeItem(TOKEN_ID);
    return true;
};

export default {
    getToken,
    setToken,
    destroyToken
};