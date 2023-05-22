<div class="col-12 col-md-4 col-lg-2 p-2 mycol d-flex align-items-center flex-column">
    <div class="card bg-transparent border-0">
        <!-- Card image -->
        <div class="card-img">
            <img src="{{ $product['thumb'] }}">
        </div>

        <div class="card-body ">

            <!-- Card title -->
            <div class="card-title py-2">
                <h6 class="text-uppercase">{{ $product['title'] }}</h6>
            </div>
        </div>
    </div>
</div>


<style lang="scss" scoped>
    .card-img {
        width: 150px;
        height: 200px;
    }

    .card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card:hover {
        cursor: pointer;
    }

    .mycol:hover {
        background-color: rgba(255, 255, 255, 0.3);
        transition: 1s;
    }
</style>
