import React, { useState } from "react";
import Validation from "./Validation";
import { Link } from "react-router-dom";
import axios from "axios";

export default function LogInForm() {
    // ! log in  valid invalid
    //? log in email
    const [email, setEmail] = useState();
    const [test1, setTest1] = useState(0);
    const [classVal1, setClassVal1] = useState("form-control ");
    //? log in password
    const [password, setPassword] = useState();
    const [test2, setTest2] = useState(0);
    const [classVal2, setClassVal2] = useState("form-control ");

    function validation() {
        if (email === undefined || email === "") {
            setTest1(2);
            setClassVal1("form-control is-invalid");
        } else {
            setTest1(1);
            setClassVal1("form-control is-valid");
        }
        if (password === undefined || setPassword === "") {
            setTest2(2);
            setClassVal2("form-control is-invalid");
        } else {
            setTest2(1);
            setClassVal2("form-control is-valid");
        }
        if (email !== null && password !== null) {
        }
    }
    const makeRequest = (e) => {
        if (email === undefined || email === "") {
            setTest1(2);
            setClassVal1("form-control is-invalid");
        } else {
            setTest1(1);
            setClassVal1("form-control is-valid");
        }
        if (password === undefined || setPassword === "") {
            setTest2(2);
            setClassVal2("form-control is-invalid");
        } else {
            setTest2(1);
            setClassVal2("form-control is-valid");
        }
        if (email !== undefined && password !== undefined) {
            e.preventDefault();

            const payload = {
                email: email,
                password: password,
            };

            axios
                .post("auth/login", payload)
                .then((response) => {

                    console.log(response.data);
                    if (response.data == false) {
                        setTest1(2);
                        setClassVal1("form-control is-invalid");
                        setTest2(2);
                        setClassVal2("form-control is-invalid");
                    } else {
                        window.location.href = response.data;
                    }
                })
                .catch((error) => {
                    console.log(error);
                    if (error.response) {
                        if (error.response.data.message) {
                            console.log(error.response.data.message);
                        }
                        if (error.response.data.errors) {
                            console.log(error.response.data.errors);
                        }
                    }
                });
        }
    };

    return (
        <div>
            <div className="realForm">
                <h1>Welcome</h1>
                <div className="form-group ">
                    <img src=" /pictures/envelope-at-fill.svg" alt="test" />
                    <input
                        type="email"
                        placeholder="Email"
                        className={classVal1}
                        required
                        onChange={(e) => {
                            setEmail(e.target.value);
                        }}
                    />
                    <Validation cond={test1} />
                </div>
                <div className="form-group">
                    <img src="/pictures/lock-fill.svg" alt="icon" />
                    <input
                        type="password"
                        placeholder="password "
                        className={classVal2}
                        required

                        onChange={(e) => {
                            setPassword(e.target.value);
                        }}
                    />
                    <Validation cond={test2} />
                </div>

                <input
                    type="submit"
                    value="submit"
                    className="btn1 "
                    onClick={makeRequest}
                />
            </div>{" "}
        </div>
    );
}
