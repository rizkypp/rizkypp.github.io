package com.pos.project;


import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.app.ProgressDialog;
import android.content.Intent;
import android.text.TextUtils;

import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;

import com.android.volley.toolbox.Volley;

import java.util.HashMap;
import java.util.Map;

public class LoginActivity extends AppCompatActivity {

  /*  ProgressDialog pDialog;
    EditText et_username, et_password;
    Button btn_login;
    Intent intent;

    int success;
    ConnectivityManager conMgr;

    private String url = Server.URL + "login2.php";
    private static final String TAG = LoginActivity.class.getSimpleName();
    private static final String TAG_SUCCESS = "success";
    private static final String TAG_MESSAGE = "message";
    private static final String TAG_USERNAME = "username";
    private static final String TAG_ID = "id";

    String tag_json_obj = "json_obj_req";

    SharedPreferences sharedPreferences;
    Boolean session = false;
    String id,username;

    public static final String my_shared_preferences = "my_shared_preferences";
    public static final String session_status = "session_status";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        conMgr = (ConnectivityManager) getSystemService(Context.CONNECTIVITY_SERVICE);
        {
            if (conMgr.getActiveNetworkInfo() != null
                    && conMgr.getActiveNetworkInfo().isAvailable()
                    && conMgr.getActiveNetworkInfo().isConnected()){

            }else {
                Toast.makeText(getApplicationContext(), "No Internet Connection",
                        Toast.LENGTH_LONG).show();
            }
        }
        btn_login = (Button)findViewById(R.id.btn_login);
        et_username = (EditText)findViewById(R.id.et_username);
        et_password = (EditText)findViewById(R.id.et_password);

        //check session login jika True maka langsung buka MainActivity
        sharedPreferences = getSharedPreferences(my_shared_preferences,
                Context.MODE_PRIVATE);
        session = sharedPreferences.getBoolean(session_status,false);
        id = sharedPreferences.getString(TAG_ID,null);
        username = sharedPreferences.getString(TAG_USERNAME,null);

        if (session){
            Intent intent = new Intent();
            intent.putExtra(TAG_ID,id);
            intent.putExtra(TAG_USERNAME,username);
            finish();
            startActivity(intent);
        }

        btn_login.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                //TODO Auto-generated method stub
                String username = et_username.getText().toString();
                String password = et_password.getText().toString();

                //mengecek kolom yang kosong
                if (username.trim().length() > 0 && password.trim().length() > 0){
                    if (conMgr.getActiveNetworkInfo() != null
                            && conMgr.getActiveNetworkInfo().isAvailable()
                            && conMgr.getActiveNetworkInfo().isConnected()){
                        checkLogin(username,password);
                        //Log.e(TAG, "Login Response: " );
                       // Toast.makeText(getApplicationContext(),"nyambung?",
                       //         Toast.LENGTH_LONG).show();
                    }else {
                        Toast.makeText(getApplicationContext(),"No Internet Connection",
                                Toast.LENGTH_LONG).show();
                    }
                }else {
                    //prom user to enter credentials
                    Toast.makeText(getApplicationContext(),"kolom tidak boleh kosong",
                            Toast.LENGTH_LONG).show();
                }
            }
        });
    }

    private  void checkLogin(final String username, final String password){
        pDialog = new ProgressDialog(this);
        pDialog.setCancelable(false);
        pDialog.setMessage(username);
        //pDialog.show();
        //showDialog();

        StringRequest strReq = new StringRequest(Request.Method.POST, url, new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        Log.e(TAG, "Login Response: " + response.toString());
                        pDialog.show();
                        //showDialog();

                        try {
                            JSONObject jObj = new JSONObject(response);
                            success = jObj.getInt(TAG_SUCCESS);

                            //check for error node in json
                            if (success == 1) {
                                String username = jObj.getString(TAG_USERNAME);
                                String id = jObj.getString(TAG_ID);

                                Log.e("Successfully Login !", jObj.toString());
                                Toast.makeText(getApplicationContext(), jObj.getString(TAG_MESSAGE),
                                        Toast.LENGTH_LONG).show();

                                //menyimpan login ke session
                                SharedPreferences.Editor editor = sharedPreferences.edit();
                                editor.putBoolean(session_status, true);
                                editor.putString(TAG_ID, id);
                                editor.putString(TAG_USERNAME, username);
                                editor.commit();

                                //memanggil mainActivity
                                Intent intent = new Intent(LoginActivity.this, MainActivity.class);
                                intent.putExtra(TAG_ID, id);
                                intent.putExtra(TAG_USERNAME, username);
                                finish();
                                startActivity(intent);
                            } else {

                                //Toast.makeText(getApplicationContext(), jObj.getString(TAG_MESSAGE),
                                //        Toast.LENGTH_LONG).show();
                            }
                        } catch (JSONException e) {
                            //JSON error
                            e.printStackTrace();
                        }
                    }
                }, new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {
                        Log.e(TAG,"Login Error: " + error.getMessage());
                        Toast.makeText(getApplicationContext(), error.getMessage(),
                                Toast.LENGTH_LONG).show();
                        //showDialog();
                    }
                }) {
                        @Override
                        protected Map<String,String> getParams(){
                        //posting parameters to login
                            Map<String,String> params = new HashMap<>();
                            params.put("username",username);
                            params.put("password",password);

                            return params;
                        }
                    };
        //AppController.getInstance().addToRequestQueue(strReq, tag_json_obj);


        //Toast.makeText(getApplicationContext(),tag_json_obj, Toast.LENGTH_LONG).show();
    }
    /*private void showDialog(){
        if (!pDialog.isShowing())
            pDialog.show();

    }

    private void hideDialog(){
        if (pDialog.isShowing())
            pDialog.show();
    }*/
//--------------------------------------------------------------------------
  //creating EditText.
    EditText Username, Password;
  //creating Button.
    Button btn_login;
  //creating Volley RequestQueue.
    RequestQueue requestQueue;
  //create string variable to hole the EditText Value.
    String UsernameHolder, PasswordHolder;
  //creating Progress dialog.
    ProgressDialog progressDialog;
  //storing server url into string variable.
    String  url ="http://192.168.137.1/android/login2.php";

    Boolean CheckEditText;

    @Override
    protected void onCreate(Bundle savedInstanceState){
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        //assigning ID's to EditText.
          Username = (EditText)findViewById(R.id.et_username);
          Password = (EditText)findViewById(R.id.et_password);
        //assigning ID's Button.
          btn_login = (Button)findViewById(R.id.btn_login);
        //creating Volley newRequestQueue.
          requestQueue = Volley.newRequestQueue(LoginActivity.this);
        //assigning activity this to progress dialog.
          progressDialog = new ProgressDialog(LoginActivity.this);

        //adding click listener to button.
          btn_login.setOnClickListener(new View.OnClickListener() {
              @Override
              public void onClick(View view) {
                  CheckEditTextIsEmptyOrNot();

                  if (CheckEditText){
                      UserLogin();
                  } else {
                      Toast.makeText(LoginActivity.this,"Please fill all form fields",
                              Toast.LENGTH_LONG).show();
                  }
              }
          });

    }

    //creating user login function.
    public void UserLogin(){

        //showing progress dialog at user registeration time.
        progressDialog.setMessage("Please wait");
        progressDialog.show();

        //creating string request with post method.
        StringRequest stringRequest = new StringRequest(Request.Method.POST, url, new Response.Listener<String>() {
            @Override
            public void onResponse(String ServerResponse) {

                //hiding the progress dialog after all task complete.
                progressDialog.dismiss();
                boolean asu;
                asu = ServerResponse.equals("Data Matched");
                String asu2=Boolean.toString(asu);
                String asu3=ServerResponse;
                //matching server response message to our text.
                if (ServerResponse.equals("Data Matched")) {
                    //if response matched then show the Toast.
                    Toast.makeText(LoginActivity.this, "Logged in successfuly", Toast.LENGTH_LONG).show();
                    //finish current login activity
                    finish();

                    //opening the user main activity using intent.
                    Intent intent = new Intent(LoginActivity.this, MapActivity.class);
                    //sending username to another activity using intent.
                    //intent.putExtra("UserUsernameTAG", UsernameHolder);
                    //finish();
                    startActivity(intent);
                } else {
                    //showing echo response message coming form server.
                    //Toast.makeText(LoginActivity.this, ServerResponse, Toast.LENGTH_LONG).show();
                    Toast.makeText(LoginActivity.this, "salah input paklek", Toast.LENGTH_LONG).show();
                    //Intent intent = new Intent(LoginActivity.this, MainActivity.class);
                    //startActivity(intent);
                }
            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError volleyError) {
                //hiding the progress dialog after all task complete.
                progressDialog.dismiss();
                //showing error message is something goes wrong.
                Toast.makeText(LoginActivity.this,volleyError.toString(),Toast.LENGTH_LONG).show();
            }
        }) {
            @Override
            protected Map<String,String> getParams(){
                //creating map string params.
                Map<String, String> params = new HashMap<String, String>();
                //adding all values to params
                //the first argument should be same sa your mysql database table colom.
                params.put("username",UsernameHolder);
                params.put("password",PasswordHolder);

                return params;
            }
        };

        //creating RequestQueue
        RequestQueue requestQueue = Volley.newRequestQueue(LoginActivity.this);
        //adding the stringrequest object into requestqueue.
        requestQueue.add(stringRequest);
    }

    public void CheckEditTextIsEmptyOrNot(){

        //getting values from EditText.
        UsernameHolder = Username.getText().toString().trim();
        PasswordHolder = Password.getText().toString().trim();

        //checking whether EditText value is empty or not.
        if (TextUtils.isEmpty(UsernameHolder)|| TextUtils.isEmpty(PasswordHolder)){
            //if any of EditText is empty then set variable value as false.
            CheckEditText = false;
        } else {
            //if any of EditText is filled the set variable value as true.
            CheckEditText = true;
        }
    }
}
