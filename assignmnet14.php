<?php 

# Question 1: #Answer
$name = $request->input('name');
----------------------------
# Question 2: #Answer
$userAgent = $request->header('User-Agent');

---------------------------------------

Question 3: #Answer
$page = $request->query('page', null);

----------------------------------------
Question 4: #Answer
return response()->json([
    'message' => 'Success',
    'data' => [
        'name' => 'John Doe',
        'age' => 25
    ]
]);

--------------------------------

Question 5: #Answer
if ($request->hasFile('avatar')) {
    $file = $request->file('avatar');
    $fileName = $file->getClientOriginalName();
    $file->move('public/uploads', $fileName);
    // Additional processing or storing logic if needed
}

--------------------------------

Question 6: #Answer
$rememberToken = $request->cookie('remember_token', null);

--------------------------------
Question 7: #Answer

Route::post('/submit', function (Illuminate\Http\Request $request) {
    $email = $request->input('email');

    // Additional processing or validation logic if needed

    return response()->json([
        'success' => true,
        'message' => 'Form submitted successfully.'
    ]);
});

