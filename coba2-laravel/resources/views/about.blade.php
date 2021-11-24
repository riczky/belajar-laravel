@extends('layouts/main')
@section('container')

<div class="container">
        <h1 class="text-center mb-5">About Company</h1>
        <div class="row mb-5">
            <div class="col-md-4">
                <h3>Developer: {{ $name }}</h3>
                <p>Email: {{ $email }}</p>
                <img src="{{ $image }}" alt="{{ $name }}" class="img-thumbnail">
            </div>
            <div class="col-md-8">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vero ad aperiam maiores? Dignissimos amet, obcaecati dolor error eos voluptas accusantium illo tempore atque ab? Sint non distinctio laboriosam asperiores numquam repellat nam corrupti aspernatur rem voluptatem animi similique dolorum assumenda quaerat, tenetur voluptate doloremque. Iure recusandae, porro cumque dicta commodi rem. Illo itaque sed perspiciatis consectetur hic tenetur vero ipsa voluptates iusto? Enim hic labore consequuntur rerum. Odit est praesentium voluptas assumenda suscipit eligendi ea laborum mollitia voluptatum dolore earum tempora deserunt, atque necessitatibus quia officia et incidunt! Soluta, magnam recusandae? Neque odit numquam sunt unde commodi consequatur ipsum architecto quidem qui dolorum repellendus iusto nemo maiores sit, accusamus perferendis deleniti ipsam rerum, aliquam, facere error reprehenderit harum temporibus? Modi, earum mollitia omnis nesciunt ab explicabo! Quis fugiat possimus doloribus, dolorem placeat error autem? Repellat earum ducimus aperiam obcaecati culpa facilis excepturi a voluptatem distinctio repudiandae, ea, totam impedit. Vero, et! Quae, atque incidunt libero culpa natus deserunt adipisci eligendi eius in numquam repellendus ipsa delectus laboriosam asperiores non error tenetur quis, qui rem sed? Fugit culpa tempora dolor, odit maiores, molestias et eum amet at ab voluptatum velit voluptatem ipsa, reiciendis qui sint hic facilis sunt perferendis eligendi?
            </div>
        </div>
    </div>

        

@endsection
