<template>
    <!-- <header class="site-header">
        <div class="wrapper site-header__wrapper">
            <h1>
                <router-link to="/" class="text-3xl">
                    <img
                        src="../../pages/pict/logo.png"
                        alt="logo"
                        class="w-12"
                    />
                </router-link>
            </h1>
            <nav class="nav">
                <button
                    class="nav__toggle"
                    aria-expanded="true"
                    type="button"
                    @click="handleClick"
                >
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
                        <base-button @click="logout">Keluar</base-button>
                    </li>
                    <li v-else class="btn-header">
                        <router-link to="/api/login">Masuk</router-link>
                    </li>
                </ul>
            </nav>
        </div>
    </header> -->
    <nav
        class="relative flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg main-color"
    >
        <div
            class="container px-4 mx-auto flex flex-wrap items-center justify-between"
        >
            <div
                class="w-full relative flex justify-between lg:w-auto px-4 lg:static lg:block lg:justify-start"
            >
                <router-link to="/" class="text-3xl">
                    <img
                        src="../../pages/pict/logo.png"
                        alt="logo"
                        class="w-12"
                    />
                </router-link>
                <button
                    class="text-black cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                    type="button"
                    v-on:click="toggleNavbar()"
                >
                    <img
                        src="../../pages/pict/menu.svg"
                        alt="logo"
                        class="w-12"
                    />
                </button>
            </div>
            <div
                v-bind:class="{ hidden: !showMenu, flex: showMenu }"
                class="lg:flex lg:flex-grow items-center"
            >
                <ul class="flex flex-col lg:flex-row list-none ml-auto">
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
                        <base-button @click="logout">Keluar</base-button>
                    </li>
                    <li v-else class="btn-header">
                        <router-link to="/api/login">Masuk</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "pink-navbar",
    data() {
        return {
            showMenu: false,
        };
    },
    methods: {
        toggleNavbar: function () {
            this.showMenu = !this.showMenu;
        },
    },
};
</script>

<style scoped>
.btn-header {
    border-radius: 30px;
    padding: 0.9rem 1rem;
    background: #2ec4b6;
    display: inline-block;
}

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
