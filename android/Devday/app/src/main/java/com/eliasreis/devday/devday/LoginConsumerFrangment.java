package com.eliasreis.devday.devday;

import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

public class LoginConsumerFrangment extends Fragment {

    public LoginConsumerFrangment() {
    }

    public static LoginConsumerFrangment newInstance() {
        LoginConsumerFrangment fragment = new LoginConsumerFrangment();
        return fragment;
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
        return inflater.inflate(R.layout.fragment_login_consumer_frangment, container, false);
    }
}