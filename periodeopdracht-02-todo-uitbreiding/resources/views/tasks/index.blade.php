@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        @if(isset($message))
            <span class="help-block" style="color:red; margin-left: 480px;">{{ $message }}</span>
        @endif   

        <!-- @if(isset($added))
            <span class="help-block" style="color:green; margin-left: 480px;">ToDo "{{ $added }}" has been added.</span>
        @endif  

        @if(isset($toggled))
            <span class="help-block" style="color:red; margin-left: 480px;">ToDo "{{ $deleted }}" has been deleted.</span>
        @endif -->

        @if (count($tasks) < 1)
            <span class="help-block" style="color:red; margin-left: 480px;">Looks like you still need to add some ToDos.</span>
        @endif
        <!-- New Task Form -->
        <form action="{{ url('task') }}" method="POST" class="form-horizontal">
            {!! csrf_field() !!}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">ToDo</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add ToDo
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Tasks -->

      @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current ToDos
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>ToDo</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    <?php $displayMsg = true ?>
                        @foreach ($tasks as $task)
                            @if(!$task->done)
                            <?php $displayMsg = false ?>
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div><a href="{{ url('task/toggle/'.$task->id) }}" class="toggleLink"><span id="toDo" class="activate">Complete ToDo: </span></a>{{ $task->name }}</div>
                                </td>

                                <td>
                                    <!-- TODO: Delete Button -->
                                            <form action="{{ url('task/'.$task->id) }}" method="POST">
                                                {!! csrf_field() !!}
                                                {!! method_field('DELETE') !!}

                                                <button>Delete ToDo</button>
                                            </form>    
                                </td>
                            </tr>                              
                            @endif
                        @endforeach
                        @if($displayMsg&&count($tasks)>0)
                            <tr>
                                <td>
                                    <p class="positive">ToDo completed, good job!</p>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    @endif

    <!-- TODO: Completed Tasks -->
    @if (count($tasks) > 0)

        <div class="panel panel-default">
            <div class="panel-heading">
                Completed ToDos
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>ToDo</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    <?php $displayMsg = true ?>
                        @foreach ($tasks as $task)
                            @if($task->done)
                            <?php $displayMsg = false ?>
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div><a href="{{ url('task/toggle/'.$task->id) }}" class="toggleLink"><span id="finished" class="activate">Uncomplete ToDO: </span></a>{{ $task->name }}</div>
                                </td>

                                <td>
                                    <!-- TODO: Delete Button -->
                                            <form action="{{ url('task/'.$task->id) }}" method="POST">

                                                {!! csrf_field() !!}
                                                {!! method_field('DELETE') !!}

                                                <button>Delete ToDo</button>
                                            </form>    
                                </td>
                            </tr>
                            @endif
                        @endforeach
                        @if($displayMsg&&count($tasks)>0)
                            <tr>
                                <td>
                                    <p class="negative">Still some work to do!</p>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection