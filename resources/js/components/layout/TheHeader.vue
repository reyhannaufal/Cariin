<template>
    <header class="site-header">
        <div class="wrapper site-header__wrapper">
            <h1>
                <router-link to="/" class="text-3xl">Cariin</router-link>
            </h1>
            <nav class="nav">
                <button class="nav__toggle" aria-expanded="false" type="button">
                    MENU
                </button>
                <ul class="nav__wrapper">
                    <li class="nav__item">
                        <router-link to="/competition">Lomba</router-link>
                    </li>
                    <li class="nav__item">
                        <router-link to="/about-us">Tentang Kami</router-link>
                    </li>
                    <li class="nav__item">
                        <router-link to="/contact-us">Hubungi Kami</router-link>
                    </li>
                    <li v-if="isLoggedIn" class="nav__item">
                        <base-button @click="logout">Logout</base-button>
                    </li>
                    <li v-else class="nav__item">
                        <router-link to="/api/login">Login</router-link>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</template>

<script>
export default {
    // computed: {
    //     isLoggedIn() {
    //         return this.$store.getters.isAuthenticated;
    //     },
    // },
};
</script>

<style scoped>
/* header {
    width: 100%;
    height: 5rem;
    display: flex;
    justify-content: center;
    align-items: center;
}

header a {
    text-decoration: none;
    color: #000000;
    display: inline-block;
    padding: 0.75rem 1.5rem;
    border: 1px solid transparent;
}

a:active,
a:hover,
a.router-link-active {
    border: 1px solid #f391e3;
}

h1 {
    margin: 0;
}

h1 a {
    color: black;
    margin: 0;
}

h1 a:hover,
h1 a:active,
h1 a.router-link-active {
    border-color: transparent;
}

header nav {
    width: 90%;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

header ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
}

li {
    margin: 0 0.5rem;
} */

.brand {
    font-weight: bold;
    font-size: 20px;
}

.site-header {
    position: relative;
    background-color: var(--main-bg-color);
    padding: 1.3rem;
}

.site-header__wrapper {
    padding-top: 1rem;
    padding-bottom: 1rem;
}

@media (min-width: 600px) {
    .site-header__wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 0;
        padding-bottom: 0;
    }
}
@media (min-width: 600px) {
    .nav__wrapper {
        display: flex;
    }
}

@media (max-width: 599px) {
    .nav__wrapper {
        position: absolute;
        top: 100%;
        right: 0;
        left: 0;
        z-index: -1;
        background-color: var(--main-bg-color);
        visibility: hidden;
        opacity: 0;
        transform: translateY(-100%);
        transition: transform 0.3s ease-out, opacity 0.3s ease-out;
    }
    .nav__wrapper.active {
        visibility: visible;
        opacity: 1;
        transform: translateY(0);
    }
}

.nav__item a {
    display: block;
    padding: 1rem 1rem;
}

.nav__toggle {
    display: none;
}
@media (max-width: 599px) {
    .nav__toggle {
        display: block;
        position: absolute;
        right: 1rem;
        bottom: 40;
    }
}
</style>
