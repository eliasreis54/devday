package com.eliasreis.devday.devday.adapter;

import android.support.v4.app.Fragment;
import android.support.v4.app.FragmentManager;
import android.support.v4.app.FragmentPagerAdapter;

import com.eliasreis.devday.devday.LoginConsumerFrangment;
import com.eliasreis.devday.devday.LoginVendorFragment;

public class LoginFragmentPageAdapter extends FragmentPagerAdapter {

    public LoginFragmentPageAdapter(FragmentManager fm) {
        super(fm);
    }

    @Override
    public Fragment getItem(int position) {
        switch (position) {
            case 0:
                return LoginVendorFragment.newInstance();

            default:
                return LoginConsumerFrangment.newInstance();
        }
    }

    @Override
    public int getCount() {
        return 2;
    }

    public CharSequence getPageTitle(int position) {
        if (position == 0) {
            return "Comerciante";
        }
        return "Consumidor";
    }
}