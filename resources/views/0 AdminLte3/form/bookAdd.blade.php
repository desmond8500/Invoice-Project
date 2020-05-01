<button type="button" class="btn btn-{{ $form->color ?? "primary" }}" data-toggle="modal" data-target=".bd-example-modal-xl">{{ $form->button ?? "Form button" }}</button>

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-{{ $form->size }}" role="document">
    <div class="modal-content">
       <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ $form->title ?? "Form Title" }}</h3>
            </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="route('{{ $form->route }}')" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    @foreach ($form->input as $input)
                        @switch($input['type'])
                            @case('file')
                                <div class="form-group">
                                    <label>{{ $input['label'] }}</label>
                                    <input type="file" class="custom-file-inpu form-control" value="{{$input['value']}}">
                                </div>
                            @break
                            @case('textaria')
                                <div class="form-group">
                                    <label>{{ $input['label'] }}</label>
                                    <textarea class="form-control" name="{{$input['name']}}" >{{$input['value']}}"</textarea>
                                </div>
                            @break
                            @case('select')
                                <div class="form-group">
                                    <label>{{ $input['label'] }}</label>
                                    <select name="{{ $input['name'] }}" class="form-control">
                                        @foreach ($input['value'] as $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @break
                            @default
                                <div class="form-group">
                                    <label>{{ $input['label'] }}</label>
                                    <input type="{{ $input['type'] }}" name="{{ $input['name']}}" class="form-control"  placeholder="{{ $input['placeholder'] }}" value="{{ $input['value'] }}">
                                </div>
                        @endswitch
                    @endforeach
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Valider</button>
                </div>
              </form>
        </div>
    </div>
  </div>
</div>
