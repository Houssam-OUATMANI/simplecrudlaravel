@extends("layout")

@section("content")

            <button>
                <a href="{{route('product.create')}}">Ajouter un produit</a>
            </button>

        @if (session("success"))
            <div>{{session("success")}}</div>
        @endif

            <h1>List de produit</h1>

            <table>
                <thead>
                   <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Prix</th>
                    <th>Action</th>
                    <th>Auteur</th>
                   </tr>
                </thead>

                <tbody>
                        @foreach ($products as  $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->title}}</td>
                                <td>{{$product->price}}</td>

                                <td>
                                    <a href="{{route("product.show", ["product" => $product->id])}}">Lire la suite</a>
                                    <a href="{{route("product.edit", ["product" => $product] )}}">Editer</a>
                                    <form action="{{route("product.destroy", ["product" => $product])}}" method="post">
                                         @method("delete")
                                         @csrf
                                        <button>Supprimer</button>
                                    </form>

                                </td>
                                <td> {{$product->user->name ?? "auteur inexistant"}}</td>
                            </tr>
                        @endforeach
                </tbody>
            </table>

            {{$products->links()}}

@endsection

