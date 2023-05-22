<div class="col-12 col-md-4 col-lg-2 p-3">
    <div class="card bg-transparent border-0">

        <div class="card-body">
            <!-- Card image -->
            <div class="card-img">
                <img src="{{ $product['thumb'] }}" class="img-fluid">
            </div>
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
    }

    .card:hover {
        cursor: pointer;
    }
</style>
