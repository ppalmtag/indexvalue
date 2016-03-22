# indexvalue
A question on StackOverflow where someone wanted to add the index as a value to
an array. This is a solution I wrote.

Preview:<br/>
<b>Array with additional indices</b><br><pre>Array
(
    [0] => Array
        (
            [value] => Lorem Ipsum.
            [data_array_index] => 0
        )

    [1] => Array
        (
            [value] => Nulla consequat massa.
            [data_array_index] => 1
        )

)

</pre>
<b>Added elements without indices</b><br><pre>Array
(
    [0] => Array
        (
            [value] => Lorem Ipsum.
            [data_array_index] => 0
        )

    [1] => Array
        (
            [value] => Nulla consequat massa.
            [data_array_index] => 1
        )

    [2] => Array
        (
            [value] => Lorem ipsum dolor sit amet.
        )

    [3] => Array
        (
            [value] => At vero eos et accusam et justo.
        )

    [4] => Array
        (
            [value] => Cum sociis natoque.
        )

)

</pre>
<b>Added the indices</b><br><pre>Array
(
    [0] => Array
        (
            [value] => Lorem Ipsum.
            [data_array_index] => 0
        )

    [1] => Array
        (
            [value] => Nulla consequat massa.
            [data_array_index] => 1
        )

    [2] => Array
        (
            [value] => Lorem ipsum dolor sit amet.
            [data_array_index] => 2
        )

    [3] => Array
        (
            [value] => At vero eos et accusam et justo.
            [data_array_index] => 3
        )

    [4] => Array
        (
            [value] => Cum sociis natoque.
            [data_array_index] => 4
        )

)

</pre>

