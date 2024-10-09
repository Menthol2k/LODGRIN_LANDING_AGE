export default function (errors) {
    let err = [];

    if (
        errors.response &&
        errors.response.data &&
        errors.response.data.errors
    ) {
        Object.keys(errors.response.data.errors).forEach((el) => {
            err[el] = errors.response.data.errors[el][0];
        });
    } else {
        err = errors; 
    }
   //  Modified by octavian
    return err;
}
