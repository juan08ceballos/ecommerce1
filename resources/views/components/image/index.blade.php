@extends('layouts.default')
@section('content')
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <div class="u-s-p-b-60">

        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-16">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary u-s-m-b-12">Imagen para producto</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <form method='post' action="{{ route('image.store') }}">
                                @csrf

                                
                                <div class="form-group">
                                    <label for="categorias">Seleccione producto</label>
                                    <select name="product" multiple class="form-control" id="products">
                                    @foreach ($products as $product)
                                         <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                    </select>
                                  </div>

                                
                                <div class="form-group">
                                    <label for="name">Inserte URL de la Imagen</label>
                                    <input name="img" value="https://www.youtube.com/embed/ikzXR2iV7Zs" required type="text" class="form-control" id="video"
                                        placeholder="ingrese url del video">
                                </div>
                                
                                

                                
                                <br>
                               

                                <button type="submit" class="btn btn-primary">Submit</button>

                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection