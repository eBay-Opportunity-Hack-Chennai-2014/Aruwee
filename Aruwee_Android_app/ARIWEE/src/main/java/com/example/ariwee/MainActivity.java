package com.example.ariwee;

import android.app.AlertDialog;
import android.content.Context;
import android.content.Intent;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.net.wifi.p2p.WifiP2pManager;
import android.os.Bundle;
import android.app.Activity;
import android.telephony.SmsManager;
import android.view.Menu;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.RadioButton;
import android.widget.Toast;


public class MainActivity extends Activity implements OnClickListener
{

    EditText editText,editText2,editText3,editText4,editText5,editText6,editText7,editText8,editText9,editText10,editText11,editText12,editText13,editText14,editText15,editText16,editText17;
    Button button,button2,button3,button4,button5,button6,button7;
    String s;
    RadioButton radioButton3;
    RadioButton radioButton4;
    RadioButton radioButton5;
    RadioButton radioButton6;
    RadioButton radioButton7;
    SQLiteDatabase db;
    protected void onCreate(Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        editText=(EditText)findViewById(R.id.editText);
        editText2=(EditText)findViewById(R.id.editText2);
        editText3=(EditText)findViewById(R.id.editText3);
        editText4=(EditText)findViewById(R.id.editText4);
        editText5=(EditText)findViewById(R.id.editText5);
        editText6=(EditText)findViewById(R.id.editText6);
        editText7=(EditText)findViewById(R.id.editText7);
        editText8=(EditText)findViewById(R.id.editText8);
        editText9=(EditText)findViewById(R.id.editText9);
        editText10=(EditText)findViewById(R.id.editText10);
        editText11=(EditText)findViewById(R.id.editText11);
        editText12=(EditText)findViewById(R.id.editText12);
        editText13=(EditText)findViewById(R.id.editText13);
        editText14=(EditText)findViewById(R.id.editText14);
        editText15=(EditText)findViewById(R.id.editText15);
        editText16=(EditText)findViewById(R.id.editText16);
        editText17=(EditText)findViewById(R.id.editText17);
        radioButton3=(RadioButton)findViewById(R.id.radioButton3);
        radioButton4=(RadioButton)findViewById(R.id.radioButton4);
        radioButton5=(RadioButton)findViewById(R.id.radioButton5);
        radioButton6=(RadioButton)findViewById(R.id.radioButton6);
        radioButton7=(RadioButton)findViewById(R.id.radioButton7);
        button=(Button)findViewById(R.id.button);
        button2=(Button)findViewById(R.id.button2);
        button3=(Button)findViewById(R.id.button3);
        button4=(Button)findViewById(R.id.button4);
        button5=(Button)findViewById(R.id.button5);
        button6=(Button)findViewById(R.id.button6);
        button7=(Button)findViewById(R.id.button7);
        button.setOnClickListener(this);
        button2.setOnClickListener(this);
        button3.setOnClickListener(this);
        button4.setOnClickListener(this);
        button5.setOnClickListener(this);
        button6.setOnClickListener(this);
        button7.setOnClickListener(this);
        db=openOrCreateDatabase("StudentDB", Context.MODE_PRIVATE, null);
        db.execSQL("CREATE TABLE IF NOT EXISTS student(client_id VARCHAR,client_name VARCHAR,client_age VARCHAR,dob VARCHAR,std VARCHAR,add_1 VARCHAR,add_2 VARCHAR,fhn VARCHAR,fhd VARCHAR,mother VARCHAR,occupation VARCHAR,income VARCHAR,s_name VARCHAR,cases VARCHAR,r_name VARCHAR,r_add VARCHAR,r_contact VARCHAR);");


    }
    public void onClick(View view)
    {
        if(view==button)
        {
            if(editText.getText().toString().trim().length()==0||
                    editText2.getText().toString().trim().length()==0||
                    editText3.getText().toString().trim().length()==0||
                    editText4.getText().toString().trim().length()==0||
                    editText5.getText().toString().trim().length()==0||
                    editText6.getText().toString().trim().length()==0||
                    editText7.getText().toString().trim().length()==0||
                    editText8.getText().toString().trim().length()==0||
                    editText9.getText().toString().trim().length()==0||
                    editText10.getText().toString().trim().length()==0||
                    editText11.getText().toString().trim().length()==0||
                    editText12.getText().toString().trim().length()==0||
                    editText13.getText().toString().trim().length()==0||
                    editText14.getText().toString().trim().length()==0||
                    editText15.getText().toString().trim().length()==0||
                    editText16.getText().toString().trim().length()==0||
                    editText17.getText().toString().trim().length()==0)
            {
                showMessage("Error", "Please enter all values");
                return;
            }
        db.execSQL("INSERT INTO student VALUES('"+editText.getText()+"','"+editText2.getText()+
                "','"+editText3.getText()+"','"+editText4.getText()+"','"+editText5.getText()+"','"+editText6.getText()+"','"+editText7.getText()+"','"+editText8.getText()+"','"+editText9.getText()+"','"+editText10.getText()+"','"+editText11.getText()+"','"+editText12.getText()+"','"+editText13.getText()+"','"+editText14.getText()+"','"+editText15.getText()+"','"+editText16.getText()+"','"+editText17.getText()+"');");
        showMessage("Success", "Record added");
        clearText();


       }
        if(view==button2)
        {
            if(editText.getText().toString().trim().length()==0)
            {
                showMessage("Error", "Please enter client Id");
                return;
            }
            Cursor c=db.rawQuery("SELECT * FROM student WHERE client_id='"+editText.getText()+"'", null);
            if(c.moveToFirst())
            {
                db.execSQL("DELETE FROM student WHERE client_id='"+editText.getText()+"'");
                showMessage("Success", "Record Deleted");
            }
            else
            {
                showMessage("Error", "Invalid client id");
            }
            clearText();
        }
        if(view==button3)
        {
            if(editText.getText().toString().trim().length()==0)
            {
                showMessage("Error", "Please enter Client Id");
                return;
            }
            Cursor c=db.rawQuery("SELECT * FROM student WHERE rollno='"+editText.getText()+"'", null);
            if(c.moveToFirst())
            {
                db.execSQL("UPDATE student SET client_name='"+editText2.getText()+"',client_age='"+editText3.getText()+
                        "', WHERE client_id='"+editText.getText()+"'");
                showMessage("Success", "Record Modified");
            }
            else
            {
                showMessage("Error", "Invalid Tax Payee Id");
            }
            clearText();
        }
        if(view==button4)
        {
            if(editText.getText().toString().trim().length()==0)
            {
                showMessage("Error", "Please enter Tax Payee Id");
                return;
            }
            Cursor c=db.rawQuery("SELECT * FROM student WHERE client_id='"+editText.getText()+"'", null);
            if(c.moveToFirst())
            {
                editText2.setText(c.getString(1));
                editText3.setText(c.getString(2));
                editText4.setText(c.getString(3));
                editText5.setText(c.getString(4));
                editText6.setText(c.getString(5));
                editText7.setText(c.getString(6));
                editText8.setText(c.getString(7));
                editText9.setText(c.getString(8));
                editText10.setText(c.getString(9));
                editText11.setText(c.getString(10));
                editText12.setText(c.getString(11));
                editText13.setText(c.getString(12));
                editText14.setText(c.getString(13));
                editText15.setText(c.getString(14));
                editText16.setText(c.getString(15));
                editText17.setText(c.getString(16));


            }
            else
            {
                showMessage("Error", "Invalid Tax Payee Id");
                clearText();
            }
        }
        if(view==button5)
        {
            Cursor c=db.rawQuery("SELECT * FROM student", null);
            if(c.getCount()==0)
            {
                showMessage("Error", "No records found");
                return;
            }
            StringBuffer buffer=new StringBuffer();
            while(c.moveToNext())
            {
                buffer.append("Client Id: "+c.getString(0)+"\n");
                buffer.append("Client Name: "+c.getString(1)+"\n");
                buffer.append("Client Age: "+c.getString(2)+"\n\n");
                buffer.append("Date Of Birth: "+c.getString(3)+"\n");
                buffer.append("School Standard: "+c.getString(4)+"\n");
                buffer.append("Address Line1: "+c.getString(5)+"\n\n");
                buffer.append("Address Line2: "+c.getString(6)+"\n");
                buffer.append("Father/Husband Name: "+c.getString(7)+"\n");
                buffer.append("Father/Husband Detail: "+c.getString(8)+"\n\n");
                buffer.append("Mother Name: "+c.getString(9)+"\n");
                buffer.append("Occupation: "+c.getString(10)+"\n");
                buffer.append("Income: "+c.getString(11)+"\n\n");
                buffer.append("Sibblings: "+c.getString(12)+"\n");
                buffer.append("CaseStudy: "+c.getString(13)+"\n");
                buffer.append("RefererName: "+c.getString(14)+"\n\n");
                buffer.append("RefererName Address: "+c.getString(15)+"\n");
                buffer.append("RefererName Contact: "+c.getString(16)+"\n");

            }
            showMessage("Client  Details", buffer.toString());
        }
        if(view==button6)
        {
            if(radioButton3.isChecked())
            {
            try
            {
                SmsManager smsManager = SmsManager.getDefault();
                String massage = "Client_Id: "+editText.getText().toString()+"."+" Client_Name: "+editText2.getText().toString()+"Client_Address:"+editText6.getText().toString()+editText7.getText().toString();
                String number="7708657369";
                smsManager.sendTextMessage(number,
                        null,
                        massage,
                        null,
                        null);
                Toast.makeText(getApplicationContext(), "Your sms has successfully sent!",
                        Toast.LENGTH_LONG).show();
            }
            catch (Exception ex)
            {
                Toast.makeText(getApplicationContext(),"Your sms has failed...",
                        Toast.LENGTH_LONG).show();
                ex.printStackTrace();
            }
            }
            if(radioButton4.isChecked())
            {
                try
                {
                    SmsManager smsManager = SmsManager.getDefault();
                    String massage = "Client_Id: "+editText.getText().toString()+"."+" Client_Name: "+editText2.getText().toString()+"Client_Address:"+editText6.getText().toString()+editText7.getText().toString();
                    String number="9790888511";
                    smsManager.sendTextMessage(number,
                            null,
                            massage,
                            null,
                            null);
                    Toast.makeText(getApplicationContext(), "Your sms has successfully sent!",
                            Toast.LENGTH_LONG).show();
                }
                catch (Exception ex)
                {
                    Toast.makeText(getApplicationContext(),"Your sms has failed...",
                            Toast.LENGTH_LONG).show();
                    ex.printStackTrace();
                }
            }
            if(radioButton5.isChecked())
            {
                try
                {
                    SmsManager smsManager = SmsManager.getDefault();
                    String massage = "Client_Id: "+editText.getText().toString()+"."+" Client_Name: "+editText2.getText().toString()+"Client_Address:"+editText6.getText().toString()+editText7.getText().toString();
                    String number="8608111391";
                    smsManager.sendTextMessage(number,
                            null,
                            massage,
                            null,
                            null);
                    Toast.makeText(getApplicationContext(), "Your sms has successfully sent!",
                            Toast.LENGTH_LONG).show();
                }
                catch (Exception ex)
                {
                    Toast.makeText(getApplicationContext(),"Your sms has failed...",
                            Toast.LENGTH_LONG).show();
                    ex.printStackTrace();
                }
            }
            if(radioButton6.isChecked())
            {
                try
                {
                    SmsManager smsManager = SmsManager.getDefault();
                    String massage = "Client_Id: "+editText.getText().toString()+"."+" Client_Name: "+editText2.getText().toString()+"Client_Address:"+editText6.getText().toString()+editText7.getText().toString();
                    String number="8608540128";
                    smsManager.sendTextMessage(number,
                            null,
                            massage,
                            null,
                            null);
                    Toast.makeText(getApplicationContext(), "Your sms has successfully sent!",
                            Toast.LENGTH_LONG).show();
                }
                catch (Exception ex)
                {
                    Toast.makeText(getApplicationContext(),"Your sms has failed...",
                            Toast.LENGTH_LONG).show();
                    ex.printStackTrace();
                }
            }
            if(radioButton7.isChecked())
            {
                try
                {
                    SmsManager smsManager = SmsManager.getDefault();
                    String massage = "Client_Id: "+editText.getText().toString()+"."+" Client_Name: "+editText2.getText().toString()+"Client_Address:"+editText6.getText().toString()+editText7.getText().toString();
                    String number="8807818942";
                    smsManager.sendTextMessage(number,
                            null,
                            massage,
                            null,
                            null);
                    Toast.makeText(getApplicationContext(), "Your sms has successfully sent!",
                            Toast.LENGTH_LONG).show();
                }
                catch (Exception ex)
                {
                    Toast.makeText(getApplicationContext(),"Your sms has failed...",
                            Toast.LENGTH_LONG).show();
                    ex.printStackTrace();
                }
            }
        }
        if(view==button7)
        {
            try
            {

                String subject = editText.getText().toString();
                String message = "Hi , Client Name:"+editText2.getText().toString()+".\n"+"Client Address: "+editText3.getText().toString();
                String to = "krishkumar1115@gmail.com";
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
    public void showMessage(String title,String message)
    {
        AlertDialog.Builder builder=new AlertDialog.Builder(this);
        builder.setCancelable(true);
        builder.setTitle(title);
        builder.setMessage(message);
        builder.show();
    }
    public void clearText()
    {
        editText.setText("");
        editText2.setText("");
        editText3.setText("");
        editText4.setText("");
        editText5.setText("");
        editText6.setText("");
        editText7.setText("");
        editText8.setText("");
        editText9.setText("");
        editText10.setText("");
        editText11.setText("");
        editText12.setText("");
        editText13.setText("");
        editText14.setText("");
        editText15.setText("");
        editText16.setText("");
        editText17.setText("");

        editText.requestFocus();
    }




    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.main, menu);
        return true;
    }
    
}
