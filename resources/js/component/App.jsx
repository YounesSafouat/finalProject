import React, { useState, useEffect } from "react";
import "./App.css";
import SignUpForm from "./SignUpForm";
import LogInForm from "./LogInForm";

function App() {
  //! changing from login to sign up
  const [formVal, setFormVal] = useState(true);
  const [yourStyle, setYourStyle] = useState("0%");
  const [yourStyleC, setYourStyleC] = useState();
  const [pic, setPic] = useState("/pictures/logIn-icone.png");
  const [image, SetImage] = useState("/pictures/python.png");
  const [span1, SetSpan1] = useState("active");
  const [span2, SetSpan2] = useState();
  const [span3, SetSpan3] = useState();
  const [span4, SetSpan4] = useState();
  const [textStyle, setTextStyle] = useState("translateY(0rem)");
  function useWindowSize() {
    const [windowSize, setWindowSize] = useState({
      width: undefined,
    });
    useEffect(() => {
      function handleResize() {
        setWindowSize({
          width: window.innerWidth,
        });
      }
      window.addEventListener("resize", handleResize);
      handleResize();
      return () => window.removeEventListener("resize", handleResize);
    }, []);
    return windowSize;
  }
  var size = useWindowSize();
  function resize() {
    if (formVal === true) {
      setYourStyle("0%");
      setYourStyleC("45%");
    }
    if (formVal === false) {
      if (size.width < 850) {
        setYourStyle("0%");
        setYourStyleC("45%");
      }
      if (size.width > 850) {
        setYourStyle("55%");
        setYourStyleC("0%");
      }
    }
  }
  function resizeLogin() {
    if (size.width > 850) {
      setYourStyle("0%");
      setYourStyleC("45%");
    }
    if (size < 850) {
      setTextStyle("0%");
    }
  }
  function resizeSign() {
    if (size.width > 850) {
      setYourStyle("55%");
      setYourStyleC("0%");
    }
    if (size < 850) {
      setTextStyle("0%");
      setYourStyleC("45%");
    }
  }
  window.addEventListener("resize", resize);

  function formSwitch() {
    if (formVal === true) {
      return (
        <div>
          <h4>you don't have an account ?</h4>
          <button
            href=""
            onClick={() => {
              setTimeout(()=>{setFormVal(false);},400)
              resizeSign();
              setPic("/pictures/signIn-icone.png");
            }}
          >
            Sign up
          </button>
        </div>
      );
    } else if (formVal === false) {
      return (
        <div>
          <h4>you have an account ?</h4>
          <button
            href="#"
            onClick={() => {
              setTimeout(()=>{setFormVal(true);},400)
              resizeLogin();
              setPic("/pictures/logIn-icone.png");
            }}
          >
            LogIn
          </button>
        </div>
      );
    }
  }
  return (
    <main>
      <div className="maincontainer">
        <div className="allForm">
          <div className="form" style={{ left: yourStyle }}>
            <form className="log-form">
              <div className="logo">
                <img src={pic} alt="icon" />
                <h4>We miss you </h4>
              </div>
              {formVal ? (
                <div className="log-in-form">
                  <LogInForm />
                </div>
              ) : (
                <div className="sign-up-form">
                  <SignUpForm />
                </div>
              )}
              <div className="under-form">{formSwitch()}</div>
            </form>
          </div>

          <div className="slidShow" style={{ left: yourStyleC }}>
            <div className="image-form">
              <img src={image} alt={image} className="image" />
            </div>
            <div className="buttom-form">
              <div className="full-text">
                <div className="text-group" style={{ transform: textStyle }}>
                  <h2>Versatile and powerful.</h2>
                  <h2>Structural markup.</h2>
                  <h2>Dynamic interactivity.</h2>
                  <h2>Component-based.</h2>
                </div>
              </div>

              <div className="dots">
                <span
                  className={span1}
                  onClick={() => {
                    SetSpan1("active");
                    SetSpan2("");
                    SetSpan3("");
                    SetSpan4("");
                    setTextStyle("translateY(0rem)");
                    SetImage("/pictures/python.png");
                  }}
                ></span>
                <span
                  className={span2}
                  onClick={() => {
                    SetSpan1("");
                    SetSpan2("active");
                    SetSpan3("");
                    SetSpan4("");
                    setTextStyle("translateY(-2.4rem)");
                    SetImage("/pictures/html.png");
                  }}
                ></span>
                <span
                  className={span3}
                  onClick={() => {
                    SetSpan1("");
                    SetSpan2("");
                    SetSpan3("active");
                    SetSpan4("");
                    setTextStyle("translateY(-5rem)");
                    SetImage("/pictures/js.png");
                  }}
                ></span>
                <span
                  className={span4}
                  onClick={() => {
                    SetSpan1("");
                    SetSpan2("");
                    SetSpan3("");
                    SetSpan4("active");
                    setTextStyle("translateY(-7.8rem)");
                    SetImage("/pictures/react.png");
                  }}
                ></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  );
}

export default App;
