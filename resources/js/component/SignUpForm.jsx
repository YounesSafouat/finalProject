import React, { useState } from "react";
import Validation from "./Validation";
import axios from "axios";
export default function SignUpForm() {
    // ! log in sign up valid invalid
    //? sign up nom
    const [val1, setVal1] = useState();
    const [test1, setTest1] = useState(0);
    const [classVal1, setClassVal1] = useState("form-control ");
    //? sign up email
    const [val2, setVal2] = useState();
    const [test2, setTest2] = useState(0);
    const [classVal2, setClassVal2] = useState("form-control ");
    //? sign up password
    const [val3, setVal3] = useState();
    const [test3, setTest3] = useState(0);
    const [classVal3, setClassVal3] = useState("form-control ");
    //? sign up confirm password
    const [val4, setVal4] = useState();
    const [test4, setTest4] = useState(0);
    const [classVal4, setClassVal4] = useState("form-control ");
    //! changing from login to sign up
    function validation() {
        if (val1 === undefined || val1 === "") {
            setTest1(2);
            setClassVal1("form-control is-invalid");
        } else {
            setTest1(1);
            setClassVal1("form-control is-valid");
        }
        if (val2 === undefined || val2 === "") {
            setTest2(2);
            setClassVal2("form-control is-invalid");
        } else {
            setTest2(1);
            setClassVal2("form-control is-valid");
        }
        if (val3 === undefined || val3 === "") {
            setTest3(2);
            setClassVal3("form-control is-invalid");
        } else {
            setTest3(1);
            setClassVal3("form-control is-valid");
        }
        if (val4 === undefined || val4 === "") {
            setTest4(2);
            setClassVal4("form-control is-invalid");
        } else {
            setTest4(1);
            setClassVal4("form-control is-valid");
        }
    }
    const makeRequest = (e) => {
        if (val1 === undefined || val1 === "") {
            setTest1(2);
            setClassVal1("form-control is-invalid");
        } else {
            setTest1(1);
            setClassVal1("form-control is-valid");
        }
        if (val2 === undefined || val2 === "") {
            setTest2(2);
            setClassVal2("form-control is-invalid");
        } else {
            setTest2(1);
            setClassVal2("form-control is-valid");
        }
        if (val3 === undefined || val3 === "") {
            setTest3(2);
            setClassVal3("form-control is-invalid");
        } else {
            setTest3(1);
            setClassVal3("form-control is-valid");
        }
        if (val4 === undefined || val4 === "") {
            setTest4(2);
            setClassVal4("form-control is-invalid");
        } else {
            setTest4(1);
            setClassVal4("form-control is-valid");
        }
        if (val1 !== undefined && val2 !== undefined && val3 === val4) {
            e.preventDefault();

            const payload = {
                email: val2,
                password: val3,
                name: val1,
            };

            axios
                .post("auth/register", payload)
                .then((response) => {
                    console.log(response.data);
                    if (response.data == false) {
                        setTest1(2);
                        setClassVal1("form-control is-invalid");
                        setTest2(2);
                        setClassVal2("form-control is-invalid");
                        setTest3(2);
                        setClassVal3("form-control is-invalid");
                        setTest4(2);
                        setClassVal4("form-control is-invalid");
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
        <div onSubmit={validation} className="realForm form-sign-up">
            <h1>Welcome</h1>
            <div className="form-group ">
                <img src=" /pictures/person-circle.svg" alt="name" />
                <input
                    type="text"
                    placeholder="Name"
                    className={classVal1}
                    required
                    onChange={(e) => {
                        setVal1(e.target.value);
                    }}
                />
                <Validation cond={test1} />
            </div>
            <div className="form-group ">
                <img src=" /pictures/envelope-at-fill.svg" alt="test" />
                <input
                    type="email"
                    placeholder="Email"
                    className={classVal2}
                    required
                    onChange={(e) => {
                        setVal2(e.target.value);
                    }}
                />
                <Validation cond={test2} />
            </div>
            <div className="form-group">
                <img src="/pictures/lock-fill.svg" alt="icon" />
                <input
                    type="password"
                    placeholder="password "
                    className={classVal3}
                    required
                    onChange={(e) => {
                        setVal3(e.target.value);
                    }}
                />
                <Validation cond={test3} />
            </div>
            <div className="form-group">
                <img src="/pictures/lock-fill.svg" alt="icon" />
                <input
                    type="password"
                    placeholder="Confirm password "
                    className={classVal4}
                    required
                    onChange={(e) => {
                        setVal4(e.target.value);
                    }}
                />
                <Validation cond={test4} />
            </div>
            <input
                type="submit"
                value="submit"
                className="btn1 "
                onClick={makeRequest}
            />
            <div className="checkbox check">
                <label>
                    <input type="checkbox" /> Remember me
                </label>
            </div>
        </div>
    );
}
