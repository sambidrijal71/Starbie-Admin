<div class = "form-group">
        <label for ="name">Name:</label>
        <input type="text" name= "name" value="{{old('name') ?? $organizations->name}} " class ="form-control">
         {{$errors->first('name')}}
    </div>
    <div class = "form-group">
        <label for ="contactno1">Mobile Number</label>
        <input type="text" name = "contactno1" value="{{old('contactno1')?? $organizations->contactno1}}" class ="form-control">
        {{$errors->first('contactno1')}}
    </div>
    <div class = "form-group">
        <label for ="contactno2">Telephone Number</label>
        <input type="text" name = "contactno2" value="{{old('contactno2')?? $organizations->contactno2}}" class ="form-control">
        {{$errors->first('contactno2')}}
    </div>
    <div class = "form-group">
            <label for ="headquarter">Headquarter</label>
            <input type="text" name ="headquarter" value="{{old('headquarter')?? $organizations->headquarter}}" class ="form-control">
            {{$errors->first('headquarter')}}
    </div>
    <div class = "form-group">
            <label for ="about">Description</label>
            <textarea name = "about" value="{{old('about')?? $organizations->about}}" cols="30" rows="10"class ="form-control">
                   {{ $organizations->about}}
             </textarea>
            {{$errors->first('about')}}
    </div>
    @csrf