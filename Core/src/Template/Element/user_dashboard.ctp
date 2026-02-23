<style>
    .align_img {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card-title {
        font-size: 12px;
        text-transform: capitalize;
    }

    .card-text {
        font-size: 12px;
        line-height: inherit;
    }

    .card-body {
        padding: 0.5rem;

    }
</style>

<p class="mb-3">
    Hello <Strong><?= $students['name'] ?></strong> ! Welcome to your Student Dashboard.
</p>


<div class="row">
    

    <div class="col-md-4">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="col-md-4 align_img" style="background-color: lightseagreen;">
                    <div class="card-body">
                        <?= $this->Html->image('/webroot/uploads/students/thumbnail/' . $students['thumbnail'], ['class' => 'rounded-circle img-fluid', 'style' => 'width: 150px;']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
</div>
