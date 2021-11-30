
<h1>Welcome to the COGIP</h1>
<p>Bonjour !</p>


<div class="row">
    <h2>Last invoice : </h2>
    <div class="col-sm-8">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Invoice number</th>
                <th scope="col">Dates</th>
                <th scope="col">Company</th>
            </tr>
            </thead>
        <?php

        foreach (\App\Table\Invoice::getLast() as $post ): ?>  <!--   Uncaught Error: Class "App\Table\Invoice" not found in-->
            <tbody>
            <tr>
                <td><?= $post->numbers; ?></td>
                <td><?= $post->dates; ?></td>
                <td><?= $post->society; ?></td>
            </tr>
            </tbody>
        <?php endforeach; ?>
        </table>
    </div>
    <h2>Last contacts : </h2>
    <div class="col-sm-4">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Company</th>
            </tr>
            </thead>
        <?php foreach (\App\Table\Contacts::getLast() as $post): ?>
            <tbody>
            <tr>
                <td><?= $post->lasName; ?></td>
                <td><?= $post->phone; ?></td>
                <td><?= $post->email; ?></td>
                <td><?= $post->society; ?></td>
            </tr>
            </tbody>

        <?php endforeach; ?>
        </table>
    </div>
    <h2>Last companies : </h2>
    <div class="col-sm-4">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">TVA</th>
                <th scope="col">Country</th>
                <th scope="col">Type</th>
            </tr>
            </thead>
        <?php foreach (\App\Table\Companies::getLast() as $post): ?>
            <tbody>
            <tr>
                <td><?= $post->name; ?></td>
                <td><?= $post->vat; ?></td>
                <td><?= $post->country; ?></td>
                <td><?= $post->type; ?></td>
            </tr>
            </tbody>

        <?php endforeach; ?>
        </table>
    </div>

</div>
