
@if($category)
    @foreach($category->Attributes as $at)
        @if($at->at_type=="text")
            <div class="form-group">
                <label>{{$at->at_name}}: </label>
                <input type="text" name="{{$at->id}}" required value="{{isset($product)?dataAttributeValue($at,$product):""}}" class="form-control"/>
            </div>
        @endif
        @if($at->at_type == "number")
            <div class="form-group">
                <label>{{$at->at_name}}: </label>
                <input type="number" name="{{$at->id}}" required value="{{isset($product)?dataAttributeValue($at,$product):""}}" class="form-control"/>
            </div>
        @endif
        @if($at->at_type == "numberfloat")
            <div class="form-group">
                <label>{{$at->at_name}}: </label>
                <input type="number" step="any" name="{{$at->id}}" required value="{{isset($product)?dataAttributeValue($at,$product):""}}" class="form-control"/>
            </div>
        @endif
        @if($at->at_type=="select")
            <div class="form-group">
                <label>{{$at->at_name}}: </label>
                <select name="{{$at->id}}" class="form-control">
                    @foreach(explode(';',$at->at_value) as $value)
                        <option value="{{$value}}" {{isset($product)?(checkDataAttributeValue($at,$product,$value)?"selected":""):""}}>{{$value}}</option>
                    @endforeach
                </select>
            </div>
        @endif
        {{-- @if($at->at_type=="checkbox")
            <div class="form-group">
                <label>{{$at->at_name}}</label>
                @foreach(explode(';',$at->at_value) as $value)
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="{{$value}}">{{$value}}
                        </label>
                    </div>
                @endforeach
            </div>
        @endif
        @if($at->at_type=="radiobox")
        <div class="form-group">
            <label>{{$at->at_name}}</label>
            @foreach(explode(';',$at->at_value) as $value)
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="{{$at->id}}" value="{{value}}">{{$value}}
                    </label>
                </div>
            @endforeach
        </div>
        @endif --}}
    @endforeach
@endif