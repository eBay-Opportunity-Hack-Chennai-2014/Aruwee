package com.example.volunteer_org;

import android.content.ActivityNotFoundException;
import android.content.Context;
import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.app.Activity;
import android.telephony.TelephonyManager;
import android.view.Menu;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

public class Main extends Activity implements OnClickListener
{

    Button button;
    Button button2;
    EditText editText,editText2,editText3,editText4,editText5,editText6,editText7;

    protected void onCreate(Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.layout);



        editText=(EditText)findViewById(R.id.editText);
        editText2=(EditText)findViewById(R.id.editText2);
        editText3=(EditText)findViewById(R.id.editText3);
        editText4=(EditText)findViewById(R.id.editText4);
        editText5=(EditText)findViewById(R.id.editText5);
        editText6=(EditText)findViewById(R.id.editText6);
        editText7=(EditText)findViewById(R.id.editText7);
        button=(Button)findViewById(R.id.button);
        button2=(Button)findViewById(R.id.button2);
        button.setOnClickListener(this);
        button2.setOnClickListener(this);

    }
            public void onClick(View view)
            {
                if(view==button)
                {

                    TelephonyManager tManager=(TelephonyManager)getSystemService(Context.TELEPHONY_SERVICE);
                    Intent webPageIntent = new Intent(Intent.ACTION_VIEW);
                    webPageIntent.setData(Uri.parse("https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=" + "Client_Id: " + editText.getText() + "   ||   " + "Client Name: " + editText2.getText() + "  ||  " + "Client Address: " + editText3.getText()+" "+editText4.getText()+" || "+"Client verification status:"+editText5.getText()+" "+editText6.getText()+"Volunteer Mobile Number: "+tManager.getLine1Number()));
                Toast.makeText(getApplicationContext(), "Take Screenshot of the QR-Code that appears", Toast.LENGTH_LONG).show();
                try
                {
                    startActivity(webPageIntent);
                }
                catch (ActivityNotFoundException ex)
                {
                    Toast.makeText(getApplicationContext(), "Turn on Internet Connection", Toast.LENGTH_LONG).show();
                }
                }
                if(view==button2)
                {
                    try
                    {

                        String subject = editText.getText().toString();
                        String message = "Hi , Client Name:"+editText2.getText().toString()+"."+"Client Address: "+editText3.getText().toString()+editText4.getText().toString()+" .Client Verification status:"+editText5.getText().toString()+" . "+editText6.getText().toString();
                        String to = editText7.getText().toString();
                        Intent emailActivity = new Intent(Intent.ACTION_SEND);
                        emailActivity.putExtra(Intent.EXTRA_EMAIL, new String[] { to });
                        emailActivity.putExtra(Intent.EXTRA_SUBJECT, subject);
                        emailActivity.putExtra(Intent.EXTRA_TEXT, message);
                        emailActivity.setType("message/rfc822");
                        startActivity(Intent.createChooser(emailActivity, "Select your Email Provider :"));
                        Toast.makeText(getApplicationContext(), "Click on -> to send mail", Toast.LENGTH_LONG).show();

                    }
                    catch(Throwable t)
                    {

                        Toast.makeText(getApplicationContext(),"The mail is not sent", Toast.LENGTH_LONG).show();
                    }
                }


            }






    @Override
    public boolean onCreateOptionsMenu(Menu menu)
    {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.main, menu);
        return true;
    }
    
}
