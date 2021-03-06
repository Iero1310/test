@include("types::layout_header")
        <?php /** @var \crocodicstudio\crudbooster\types\radio\RadioModel $column */ ?>
        @foreach($column->getOptions() as $key=>$value)
            <?php
                $columnValue = old($column->getName())?:($column->getDefaultValue())?:$column->getValue();
            ?>
            <div class="{{ $column->getDisabled()?"disabled":"" }}">
                <label class='radio-inline'>
                    <input type="radio"
                            {{ $column->getDisabled()?"disabled":"" }}
                            {{ $columnValue == $key?"checked":"" }}
                           name="{{ $column->getName() }}"
                           value="{{ $key }}"> {{ $value }}
                </label>
            </div>
        @endforeach
@include("types::layout_footer")