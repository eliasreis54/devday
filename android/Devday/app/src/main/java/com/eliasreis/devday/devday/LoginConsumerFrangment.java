package com.eliasreis.devday.devday;

import android.content.Intent;
import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import butterknife.ButterKnife;
import butterknife.OnClick;

public class LoginConsumerFrangment extends Fragment {

    public LoginConsumerFrangment() {
    }

    public static LoginConsumerFrangment newInstance() {
        LoginConsumerFrangment fragment = new LoginConsumerFrangment();
        return fragment;
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
        View view = inflater.inflate(R.layout.fragment_login_consumer_frangment, container, false);
        ButterKnife.bind(this, view);
        return view;
    }

    @OnClick(R.id.login_button)
    public void login() {
        Intent intent = new Intent(getActivity(), SigInConsumerActivity.class);
        startActivity(intent);
    }

    @OnClick(R.id.text_login)
    public void loginTxt(){
        Intent intent = new Intent(getActivity(), SigInConsumerActivity.class);
        startActivity(intent);
    }
}