<div class="myContainer text-black mt-3">
    <!-- Logo -->
    <div class="logo-container">
        <img src="img/dc-logo.png" alt="logoDCsmall">
    </div>

    <!-- Navbar -->
    <div class="navbar">

        <ul class="mainList">
            <li class="text-uppercase fw-bold">
                <a href="#" class="text-decoration-none">HOME</a>
            </li>
        </ul>

    </div>
</div>

<style>
    .myContainer {
        width: 75%;
        height: 100%;
        padding: 1rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .myContainer .navbar {
        height: 100%;
        padding: 0;
    }

    .navbar .mainList {
        height: 100%;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        list-style-type: none;
    }

    .mainList li {
        height: 100%;
        padding: 0;
        margin: 0 .7rem;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .mainList a {
        height: 100%;
        display: flex;
        align-items: center;
    }

    .mainList a:hover {
        border-bottom: 5px solid #0282f9;
    }
</style>
