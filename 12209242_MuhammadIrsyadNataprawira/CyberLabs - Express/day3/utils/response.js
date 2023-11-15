const response = (statusCode, data, msg, res) => {
    res.status(statusCode).json({
        payload: {
            status_code: statusCode,
            datas: data,
            message: msg
        }
    })
}

module.exports = response;