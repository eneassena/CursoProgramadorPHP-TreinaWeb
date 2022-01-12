(function(){

    let sys = {
        props: {
            el: null,
            elList: []
        },
            actions: {}
    }
    const factor = () => sys;

    let MathObj = factor();

    MathObj.props.screen = document.querySelector(".screen");
    MathObj.props.buttons = document.querySelectorAll(".btn");
    MathObj.props.clear = document.querySelector(".btn-clear");
    MathObj.props.equal = document.querySelector(".btn-equal");
    MathObj.props.remove = document.querySelector(".btn-remove");

    if(MathObj.props.screen.value.length > 1 && MathObj.props.screen.value[0] === '0'){
        MathObj.props.screen.value = MathObj.props.screen.value.replace('0', '');
    }
    MathObj.actions.exerCalc = () => {
        let operacao = eval(MathObj.actions.stringReplace('undefined', MathObj.props.screen.value));
        MathObj.props.screen.value = operacao;
    }
    MathObj.actions.stringReplace = (search, value) => {
        return value.replace(search, '');
    }
    MathObj.props.buttons.forEach((button) => {
        button.addEventListener('click', (e) => {
            let value = e.target.dataset.num;
            let simbolo = "";
            switch (MathObj.props.screen.value) {
                case '+':
                case '-':
                case '/':
                case '*':
                    simbolo += MathObj.props.screen.value;
                    break;
                default:
                    MathObj.props.screen.value += value;
                    if(simbolo){
                        MathObj.props.screen.value += simbolo;
                    }
            }
        });
    });
    MathObj.props.equal.addEventListener('click', (e) => {
        try {
            MathObj.actions.exerCalc();
        } catch (e) {
            MathObj.props.screen.value = e;
        }
    });
    MathObj.props.clear.addEventListener('click', (e) => {
        MathObj.props.screen.value = '';
    });
    MathObj.props.remove.addEventListener('click', e => {
        let string = MathObj.props.screen;
        MathObj.props.screen.value = string.value.substring(0, string.value.length-1);
    })
}());
