export default {
    async login(context, payload) {
        return context.dispatch("auth", {
            ...payload,
            mode: "login",
        });
    },
    async signUp(context, payload) {
        return context.dispatch("auth", {
            ...payload,
            mode: "signup",
        });
    },
    async auth(context, payload) {
        const mode = payload.mode;

        let url = "http://127.0.0.1:8000/api";

        if (mode === "signup") {
            url = "http://127.0.0.1:8000/api/register";
        }

        const response = await fetch(url, {
            method: "POST",
            body: JSON.stringify({
                name: payload.name,
                email: payload.email,
                password: payload.password,
                returnSecureToken: true,
            }),
        });

        const responseData = await response.json();

        if (!response.ok) {
            const error = new Error(
                responseData.message || "Silahkan cek kembali data anda"
            );
            throw error;
        }
    },
};
