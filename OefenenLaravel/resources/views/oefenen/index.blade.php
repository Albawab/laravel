@extends('layouts.app')

@section('content')
     <h6><a href="{{url()->current()}}/create"> Oefenen Toevoegen.</a></h6>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>

            @guest
                <h1>Inloggen</h1>
            @else

            <h1>Hallo {{Auth::user()->name}}</h1>
            @endguest

            @foreach($charaties as $charaty)
                <tr>
                    <td scope="row">{{$charaty->id}}</td>
                    <td scope="row">{{$charaty->name}}</td>
                    <td><a href="{{url()->current()}}/{{$charaty->id}}">Bekijken</a></td>
                    <td><a href="{{url()->current()}}/{{$charaty->id}}/edit">Bewerken</a></td>

                    <td>
                        <form style="display:inline" action="{{ route('oefenen.destroy', $charaty->id) }}" method="POST">
    
                            <a href="{{ route('oefenen.show', $charaty->id) }}" title="show" class="ml-7">
                                <i class="fas fa-eye text-success  fa-lg">Bekijken</i>
                            </a>
                            <span>-</span>    
                            <a href="{{ route('oefenen.edit', $charaty->id) }}" class="ml-7">
                                <i class="fas fa-edit  fa-lg">Bewerken</i>
    
                            </a>
    
                            @csrf
                            @method('DELETE')
                            <span>-</span>  

                            <!-- this delete the item -->
                            <button type="submit" title="delete" style="border: none; background-color:transparent;" class="ml-7">
                                <i class="fas fa-trash fa-lg text-danger">Verwijderen</i>
    
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <H1>Hallo Date</H1>


    <form name="form" action="" method="Get">
        @csrf
        start
        <input type="date" name="start" id="start">
        end
        <input type="date" name="end" id="end">


        <input  type="submit" value="Post">
      </form>

      @if (isset($_GET['start']) && isset($_GET['end']))
                <?php


                $datetime1 = new DateTime($_GET['start']);

                $datetime2 = new DateTime($_GET['end']);

                $difference = $datetime1->diff($datetime2)->format('%a');
                echo 'Dayes: '; print_r($difference);
                
                if($datetime1 < $datetime2 )
                 {
                     echo "<br> star is before end";
                 }else {
                    echo "<br> star is after end";
                 }
            
            ?>
      @endif

      <H1>Hallo Time</H1>

      <form name="form" action="" method="Get">
        @csrf
        start time
            <input type="time" id="start-time"  step="3600" name="start-time" min="09:00" max="16:00" required>
        end time
             <input type="time" id="end-time"  step="3600" name="end-time" min="09:00" max="17:00" required>
             <input  type="submit" value="Post">
      </form>

      @if (isset($_GET['start-time']) && isset($_GET['end-time']))
                <?php                
                    $datetime1 = new DateTime($_GET['start-time']);

                     $datetime2 = new DateTime($_GET['end-time']);
                     $interval = $datetime1->diff($datetime2);
                      echo "Hours";echo $interval->h;echo "<br>";
                      echo "Minuts";echo $interval->i; "<br>";
                ?>
      @endif

@endsection


@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection