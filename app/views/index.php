<div class="container py-5">
    <h1 class="text-center mb-3"><?= $data['web_name']; ?></h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Penyanyi</th>
                <th scope="col">Album</th>
                <th scope="col">Durasi</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <!-- <?php foreach ($music_data as $key => $dvs) : ?>
                <tr>
                    <th scope="row"><?= $key + 1; ?></th>
                    <td><?= $dvs['title']; ?></td>
                    <td><?= $dvs['singer']; ?></td>
                    <td><?= $dvs['album'] ?? $dvs['title']; ?></td>
                    <td><?= date("i:s", strtotime($dvs['duration'] ?? '')); ?></td>
                    <td><a href="music/detail.php?id=<?= $dvs['id']; ?>">Lihat Detail</a></td>
                </tr>
            <?php endforeach; ?> -->
        </tbody>
    </table>
</div>