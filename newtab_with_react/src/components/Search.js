/**
 * Created by guotingjie on 2018/3/20.
 */
import React from 'react';


export default class Search extends React.Component {
    constructor(arg) {
        super(arg);
    }

    componentWillMount = ()=> {
    }

    render() {
        return (
            <div id="fakebox">
                <div id="fakebox-text">搜索Google或输入网址</div>
                <input id="fakebox-input" autoComplete="off" tabIndex="-1" type="url" />
                <div id="cursor"></div>
            </div>
        )
    }
}